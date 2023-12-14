<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\UploadedFile;

function sendSuccessResponse(string $message, int $statusCode = 200, $payload = []): JsonResponse
{
    return response()->json([
        'success' => true,
        'message' => $message,
        'data' => $payload
    ], $statusCode);
}

function sendErrorResponse(string $message, int $statusCode = 200, $payload = []): JsonResponse
{
    return response()->json([
        'success' => false,
        'message' => $message,
        'data' => $payload
    ], $statusCode);
}

function uploadImage(UploadedFile $image, $folder = 'storage/app/public/admin/logo', $fileName = null)
{
    $imageCategory = substr($folder, strrpos($folder, '/') + 1);

    if (!$fileName) {
        $fileName = $imageCategory . '_' . time() . '_' . $image->getClientOriginalName();
    }

    $path = $image->storeAs($folder, $fileName);

    return $fileName;
}


