<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Input;

use App\Models\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* Se inactiva middleware ya que los cambios de contraseña puede realizarlos el rol admin.
        $this->middleware('guest');
        */
    }

 /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        //Si no está autenticado y no llegó un token, redirige a recuperar por email.
        if ( auth()->guest() ){
            return view( 'auth.passwords.email' );
        } else {

            $user = (Input::has('id') and \Entrust::can('user-edit')) //Si usuario autenticado tiene permiso para editar usuarios...
                    ? User::findOrFail(Input::get('id'))
                    : auth()->user();
            $email = $user->email;
            $token = \Password::getRepository()->create( $user );

            return view( 'auth.passwords.reset' )->with(
                ['token' => $token, 'email' => $email]
            );
        }
    }


    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    /**
     * Get the response for after a successful password reset.
     *
     * @param  string  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function getResetSuccessResponse($response)
    {
        if( auth()->check() && \Entrust::hasRole('admin') )
            return redirect('auth/usuarios')->with('status', trans($response));
        else
            return redirect($this->redirectPath())->with('status', trans($response));

    }
}