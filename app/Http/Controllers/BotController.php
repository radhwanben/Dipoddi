<?php
namespace App\Http\Controllers;

use Telegram\Bot\Api;
use Telegram\Bot\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;
use Telegram\Bot\Exceptions\TelegramResponseException;

class BotController extends Command
{

    /*
    public function start()
    {
        $telegram = new Api('6747578183:AAESbpL8qJhKyzM0uhiGMTOpGRvQiShzCHU');
        $response = $telegram->getMe();

        $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);

        // This will update the chat status to typing...
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        // Laravel
        dd($telegram->getCommands());

        $botId = $response->getId();
        $firstName = $response->getFirstName();
        $username = $response->getUsername();


        /*
        try {
            
            $bot=Telegram::setAccessToken("6747578183:AAESbpL8qJhKyzM0uhiGMTOpGRvQiShzCHU");
            dd(Telegram::getBotConfig());
            $response = Telegram::setMyCommands([
                'chat_id' => 'DIPODDI_bot', // Corrected chat ID as integer
                'text' => 'start',
                'token' => '6747578183:AAESbpL8qJhKyzM0uhiGMTOpGRvQiShzCHU', // Replace with your bot token
            ]);
            
            // Handle successful response
            dd($response);
        } catch (TelegramResponseException $e) {
            // Handle Telegram API errors
            dd($e);
        } catch (\Exception $e) {
            // Handle other exceptions
            dd($e->getMessage());
        }
    }
    *        */

     protected $name = "start";

    /**
     * @var string Command Description
     */
    protected $description = "Start Command to get you started";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        // This will send a message using `sendMessage` method behind the scenes to
        // the user/chat id who triggered this command.
        // `replyWith<Message|Photo|Audio|Video|Voice|Document|Sticker|Location|ChatAction>()` all the available methods are dynamically
        // handled when you replace `send<Method>` with `replyWith` and use the same parameters - except chat_id does NOT need to be included in the array.
        $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);

        // This will update the chat status to typing...
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        // This will prepare a list of available commands and send the user.
        // First, Get an array of all registered commands
        // They'll be in 'command-name' => 'Command Handler Class' format.
        $commands = $this->getTelegram()->getCommands();

        // Build the list
        $response = '';
        foreach ($commands as $name => $command) {
            $response .= sprintf('/%s - %s' . PHP_EOL, $name, $command->getDescription());
        }

        // Reply with the commands list
        $this->replyWithMessage(['text' => $response]);

        // Trigger another command dynamically from within this command
        // When you want to chain multiple commands within one or process the request further.
        // The method supports second parameter arguments which you can optionally pass, By default
        // it'll pass the same arguments that are received for this command originally.
        $this->triggerCommand('subscribe');
    }
}
