<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\LoginReq;
use App\Http\Requests\auth\RegisterReq;
use App\Services\auth\AuthenticationServiceInterface;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function __construct(protected AuthenticationServiceInterface $service)
    {
    }

    public function register(RegisterReq $request)
    {
        $data = $request->only(["fullname", "email", "password"]);
        $response = $this->service->register($data);

        $responseData = json_decode($response->getContent(), true);
        $status = $response->getStatusCode() === 201 ? "success" : "error";
        $message = $responseData['message'];

        return redirect()->back()->with($status, $message);
    }

    public function login(LoginReq $request)
    {
        $data = $request->only(["email", "password"]);
        $response = $this->service->login($data);
        $responseData = json_decode($response->getContent(), true);
        $status = $response->getStatusCode() === 201 ? "success" : "error";
        $message = $responseData['message'];

        return redirect()->back()->with($status, $message);
    }

    public function logout(Request $request)
    {
        $response = $this->service->logout();

        $responseData = json_decode($response->getContent(), true);
        $status = $response->getStatusCode() === 201 ? "success" : "error";
        $message = $responseData['message'];
        return redirect()->route("home")->with($status, $message);
    }
}
