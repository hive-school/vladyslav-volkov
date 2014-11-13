<?php
namespace BionicUniversity\Bundle\BlogBudle\Notification;

class EmailNotification extends AbstractNotification
{

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @param \Swift_Mailer $mailer
     */
    public function setMailer($mailer)
    {
        $this->mailer = $mailer;
    }

    public function send()
    {
        $message = new \Swift_Mime_SimpleMessage();
        $message->setTo($this->securityContext->getToken()->getUser()->getEmail());
        return $this->mailer->send($message);
    }

}