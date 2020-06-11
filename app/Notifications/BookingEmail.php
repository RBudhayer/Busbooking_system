<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


class BookingEmail extends Notification
{
    use Queueable;
    private $emaisend;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($emaisend)
    {
        //
        $this->emaisend =$emaisend;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public $detail;
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    // ->line('Booking Confirmation')
                    // ->line('')  
                    // ->action('Click here to visit site', url('/'))
                    // ->line('Thank you for using our application!');
                    ->line($this->emaisend['date'])
                    ->line($this->emaisend['cost'])
                    ->line($this->emaisend['dest1'])
                    ->line($this->emaisend['dest2'])
                    ->line($this->emaisend['seat_no'])
                    ->action($this->emaisend['actionURL']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
