<?php
//The PHP Observer pattern is used to alert the rest of the system about particular events in certain places.

class Theater {

    public function current(Movie $movie) : void {

        $critics = $movie->getCritics();
        $this->message->send($critics, '...');

        $movie->play();

        $movie->pause(5);
        $this->progress->interval($critics)
        $movie->end();

        $this->response->request($critics);
    }
}
?>
