<?php

namespace App\Pattern\BuilderPattern\Entity;

class AppBlogEntity extends AppAbstractEntity
{
    private int $postsPerPage;
    private string $displayStyle;
    private bool $showDate;

    public function getPostsPerPage(): int
    {
        return $this->postsPerPage;
    }

    public function setPostsPerPage(int $postsPerPage): self
    {
        $this->postsPerPage = $postsPerPage;
        return $this;
    }

    public function getDisplayStyle(): ?string
    {
        return $this->displayStyle;
    }

    public function setDisplayStyle(string $displayStyle): self
    {
        $this->displayStyle = $displayStyle;
        return $this;
    }

    public function getShowDate(): bool
    {
        return $this->showDate;
    }

    public function setShowDate(bool $showDate): self
    {
        $this->showDate = $showDate;
        return $this;
    }
}
