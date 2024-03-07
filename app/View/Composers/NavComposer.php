<?php
 
namespace App\View\Composers;
 
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
 
class NavComposer
{
    public $notificationCount;
    public function __construct()
    {
        if(Auth::check()){
            $this->notificationCount = auth()->user()->UserDesc->Notification->count();
        }
    }
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        if(Auth::check()){
            $view->with('notificationCount', auth()->user()->UserDesc->Notification->count());
        }
    }
}