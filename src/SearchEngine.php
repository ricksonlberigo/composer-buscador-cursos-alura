<?php

namespace Projeto\BuscadorDeCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class SearchEngine
{
    private ClientInterface $clientHttp;
    private Crawler $crawler;

    public function __construct(ClientInterface $clientHttp, Crawler $crawler)
    {
        $this->clientHttp = $clientHttp;
        $this->crawler = $crawler;
    }

    public function search(string $url): array
    {
        $response = $this->clientHttp->request('GET', $url);
        $html = $response->getBody();

        $this->crawler->addHtmlContent($html);

        $elementsCourses = $this->crawler->filter('span.card-curso__nome');
        $courses = [];

        foreach ($elementsCourses as $element) {
            $courses[] = $element->textContent;
        }

        return $courses;
    }
}
