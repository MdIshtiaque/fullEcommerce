<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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

function uploadImage(UploadedFile $image, $folder = 'admin/logo', $fileName = null)
{
    $imageCategory = substr($folder, strrpos($folder, '/') + 1);

    if (!$fileName) {
        $fileName = $imageCategory . '_' . time() . '_' . $image->getClientOriginalName();
    }
    if (!file_exists($folder)) {
        mkdir($folder, 0755, true);
    }
    $image->move(public_path($folder), $fileName);
    return $fileName;
}


