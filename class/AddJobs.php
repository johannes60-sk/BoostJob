<?php

class AddJobs
{

    protected $data;
    protected $db;

    function __construct($db, $data)
    {
        $this->data = $data;

        $this->db = $db;
    }

    public function addJob()
    {

        $job =  [
            'job_name' => $this->data['job_name'],
            'localisation' =>  $this->data['localisation'],
            'job_type' => $this->data['job_type'],
            'job_categorie' => $this->data['job_categorie'],
            'job_description' => $this->data['job_description'],
            'email_candidature' => $this->data['email_candidature'],
            'salary' => $this->data['salary'],
            'entreprise_name' => $this->data['entreprise_name'],
            'url_site_entreprise' => $this->data['url_site_entreprise'],
            'slogan' => $this->data['slogan'],
            // '$url_logo' => 'URL'
        ];

        $this->db->query(
            "INSERT INTO jobs(nom, localisation, type, catégorie, description, email_candidature, salaire, nom_entreprise, url_site_entreprise, slogan) 
                
                VALUES(:job_name, :localisation, :job_type, :job_categorie, :job_description, :email_candidature, :salary, :entreprise_name, :url_site_entreprise, :slogan)", $job);
    }
}
