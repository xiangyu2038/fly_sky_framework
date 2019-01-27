<?php
namespace XiangYu2038\FlySky\Listeners;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;
class KernelView {
    public function __construct()
    {
        //
    }


    public function handle($event)
    {

        $response = $event -> getControllerResult();

        if (is_string($response)) {
            $event -> setResponse(new Response($response));
        }elseif($response instanceof View){
            $event -> setResponse(new Response($response -> render()));
        }

        return ;
        //......各种实现
    }
}
