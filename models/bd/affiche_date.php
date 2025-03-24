<?php


     function dates ($date) {

        $joure = date('l', $date);

        $day_of_week_fr = [
            'Sunday' => 'Dimanche',
            'Monday' => 'Lundi',
            'Tuesday' => 'Mardi',
            'Wednesday' => 'Mercredi',
            'Thursday' => 'Jeudi',
            'Friday' => 'Vendredi',
            'Saturday' => 'Samedi',
        ];
        $moi = date('F', $date);
        $mois_fr = [
            'January' => 'Janvier',
            'February' => 'Février',
            'March' => 'Mars',
            'April' => 'Avril',
            'May' => 'Mai',
            'June' => 'Juin',
            'July' => 'Juillet',
            'August' => 'Août',
            'September' => 'Septembre',
            'October' => 'Octobre',
            'November' => 'Novembre',
            'December' => 'Décembre',
        ];

        $joures = $day_of_week_fr[$joure];
        $joure_chiffre = date('d', $date);
        $mois = $mois_fr[$moi];
        $annee = date('Y', $date);
        $heur_ = floor(($date % (24 * 3600)) / 3600);
        $minute_ = floor(($date % 3600) / 60);
        $dates = $joures .'  '. $joure_chiffre .'  '. $mois.'  '.$annee. " à ". $heur_."h : ".$minute_;
        return $dates;
    };