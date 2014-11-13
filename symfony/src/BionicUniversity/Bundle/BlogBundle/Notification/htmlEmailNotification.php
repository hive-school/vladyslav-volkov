<?php
namespace BionicUniversity\Bundle\BlogBudle\Notification;

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class HtmlEmailNotification extends AbstractNotification
{

    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @param EngineInterface $templating
     */
    public function setTemplating($templating)
    {
        $this->templating = $templating;
    }

    public function send()
    {
        $message = new \Swift_Mime_SimpleMessage();
        $message->setTo($this->securityContext->getToken()->getUser()->getEmail());
        return $this->mailer->send($this->templating->render($message));
    }

}