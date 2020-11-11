<?php

namespace App\Repository;

use App\Model\Event;

class EventRepository {
    /**
     * @var Event
     */
    private $event;

    /**
     * EventRepository constructor.
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }


    /**
     * Get all events
     * @return mixed
     */
    public function getEvents () {
        return $this->event->orderBy('created_at', 'desc')->paginate(5);
    }

    /**
     * Get a single event by Id
     * @param int $id
     */
    public function getEventById (int $id) {
        $event = $this->event->findOrFail($id);

        if($event) {
            return $event;
        }
        return abort(403);
    }

    /**
     * Create an event
     * @param $request
     * @return bool
     */
    public function storeEvent ($request) {
        $event = $this->event;
        /*
         * Save multiple images
         */
        if ( $request->hasFile('images') ) {

            foreach($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->move(public_path().'/images/events/', $name);
                $data[] = $name;
            }

        }

        if (! empty($data)) {
            $event->images = json_encode($data);
        }

        /*
         * Save videos
         */
        if ($request->hasFile('videos')) {

            foreach ($request->file('videos') as $video) {
                $filename = $video->getClientOriginalName();
                $path = public_path() . '/videos/events/';
                $video->move($path, $filename);

                $dataSet[] = $filename;
            }
        }

        if (! empty($dataSet) ) {
            $event->videos = json_encode($dataSet);
        }

        $event->nom = $request->nom;
        $event->description = $request->description;
        $event->prix = $request->prix;
        $event->dateDebut = $request->dateDebut;
        $event->dateFin = $request->dateFin;
        $event->project_id = $request->project_id;

        return $event->save();
    }

    /**
     * Update an event
     * @param $id
     * @param $request
     */
    public function updateEvent ($id, $request) {
        $event = $this->getEventById($id);

        if ($event) {

            /*
             * Save multiple images
            */
            if ( $request->hasFile('images') ) {

                foreach($request->file('images') as $image)
                {
                    $name = $image->getClientOriginalName();
                    $image->move(public_path().'/images/events/', $name);
                    $data[] = $name;
                }

            }

            if (! empty($data)) {
                $event->images = json_encode($data);
            }

            /*
             * Save videos
             */
            if ($request->hasFile('videos')) {

                foreach ($request->file('videos') as $video) {
                    $filename = $video->getClientOriginalName();
                    $path = public_path() . '/videos/events/';
                    $video->move($path, $filename);

                    $dataSet[] = $filename;
                }
            }

            if (! empty($dataSet) ) {
                $event->videos = json_encode($dataSet);
            }
            $event->nom = $request->nom;
            $event->description = $request->description;
            $event->prix = $request->prix;
            $event->dateDebut = $request->dateDebut;
            $event->dateFin = $request->dateFin;
            $event->project_id = $request->project_id;

            return $event->save();
        }
        return abort(403);
    }

    /**
     * delete an event
     * @param $id
     */
    public function delete ($id) {
        $event = $this->getEventById($id);

        if( $event) {
            return $event->delete();
        }
        return abort(403);
    }

}
