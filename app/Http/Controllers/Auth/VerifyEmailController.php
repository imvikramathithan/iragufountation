<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
       
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('update.student', absolute: false).'?verified=1');
        }
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect()->intended(route('update.student', absolute: false).'?verified=1');


        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('update.gallery', absolute: false).'?verified=1');
        }
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect()->intended(route('update.gallery', absolute: false).'?verified=1');

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('update.management', absolute: false).'?verified=1');
        }
        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect()->intended(route('update.management', absolute: false).'?verified=1');



        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('update.testimonials', absolute: false).'?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect()->intended(route('update.testimonials', absolute: false).'?verified=1');
    }
    
}
