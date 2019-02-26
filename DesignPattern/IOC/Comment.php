<?php
namespace Model;

class Comment implements CommentInterface
{
    private $content;
    private $author;

    public function __construct($content, $author)
    {
        $this->setContent($content);
        $this->setAuthor($author);
    }

    public function setContent($content)
    {
        if (!is_string($content) || strlen($content) < 10) {
            throw new InvalidArgumentException(
                "The comment is invalid."
            );
        }
        $this->content = $content;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setAuthor($author)
    {
        if (
            !is_string($author)
            || strlen($author) < 2
            || strlen($author) > 50
        ) {
            throw new InvalidArgumentException(
                "The author is invalid."
            );
        }
        $this->author = $author;
        return $this;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

