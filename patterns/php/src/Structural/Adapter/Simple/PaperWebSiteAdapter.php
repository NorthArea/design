<?php


namespace App\Structural\Adapter\Simple;


class PaperWebSiteAdapter extends PaperBook
{
    /**
     * @var WebSite
     */
    private WebSite $webSite;
    private string $url = 'www.site.com';

    public function __construct(WebSite $webSite)
    {
        $this->webSite = $webSite;
        $this->webSite->request($this->url . "?page=1");
    }

    public function getText(): string
    {
        return $this->webSite->getContent();
    }

    public function getPage(): int
    {
        return parent::getPage();
    }

    public function nextPage(): void
    {
        parent::nextPage();
        $this->webSite->request($this->url . "?page={$this->getPage()}");
    }

}