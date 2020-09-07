<?php


namespace Mindbird\Contao\TheThingsNetwork\Controller;


use Mindbird\Contao\TheThingsNetwork\Models\ApplicationModel;
use Mindbird\Contao\TheThingsNetwork\Models\DeviceModel;
use Mindbird\Contao\TheThingsNetwork\Models\MessageModel;
use Mindbird\TheThingsNetwork\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{

    /**
     * @param string $token
     * @param Request $request
     * @return Response
     */
    public function indexAction(string $token, Request $request): Response
    {
        $application = ApplicationModel::findBy('token', $token);
        if ($application === null) {
            return new Response('Can not find application', 404);
        }

        $messageJson = json_decode($request->getContent());

        $device = DeviceModel::findBy('name', $messageJson->dev_id);
        if ($device === null) {
            return new Response('Can not find device', 404);
        }


        $message = new MessageModel();
        $message->message = $request->getContent();
        $message->pid = $device->id;
        $message->save();

        return new Response();
    }

}
