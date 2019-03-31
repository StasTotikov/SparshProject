<?php
class Home extends CI_Controller
{


    public function index()
    {
     
        $this->load->view('index');
    }

    public function About()
    {     
        $this->load->view('about');
    }

    public function BlogSingle()
    {
        $this->load->view('blog-single');
    }

    public function Blog()
    {
        $this->load->view('blog');
    }

    public function Contact()
    {
        $this->load->view('contact');
    }

    public function Elements()
    {
        $this->load->view('elements');
    }

    public function Projects()
    {
        $this->load->view('projects');
    }

    public function Service()
    {
        $this->load->view('service');
    }
}