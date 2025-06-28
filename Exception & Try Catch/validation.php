<?php



function LoginValidation(LoginRequest $request)
{
    if (!isset($request->user)) {
        throw new CustomException('User mu Kosong');
    } else  if (!isset($request->pass)) {
        throw new CustomException('Password mu Kosong');
    } else  if ($request->user == '') {
        throw new CustomException('User mu Kosong');
    } else  if ($request->pass == '') {
        throw new CustomException('Pass mu Kosong');
    }
}
