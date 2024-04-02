<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BotController extends Controller
{
    public function start()
    {
        // The URL of your bot's endpoint
        $botUrl = 'https://t.me/DIPODDI_bot';

        // The choices or data you want to send to your bot
        $data = [
            'choice1' => '1',
            // Add more choices as needed
        ];

        // Send a POST request to the bot endpoint with the choices
        $response = Http::post($botUrl . '/start', 1);
        dd($response->body());

        // Check if the request was successful
        if ($response->successful()) {
            // Get the bot's response
            $botResponse = $response->body();
            
            // You can return this response to a view or just output it
            return response()->json([
                'message' => 'Bot interaction successful',
                'botResponse' => $botResponse,
            ]);
        } else {
            // Handle the error
            return response()->json([
                'error' => 'Failed to communicate with the bot',
            ], 500);
        }
    }
}
