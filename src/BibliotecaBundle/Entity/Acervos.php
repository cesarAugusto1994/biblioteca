<?php

namespace BibliotecaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acervos
 *
 * @ORM\Table(name="acervos")
 * @ORM\Entity(repositoryClass="BibliotecaBundle\Repository\AcervosRepository")
 */
class Acervos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="editora", type="string", length=255)
     */
    private $editora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime")
     */
    private $cadastro;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Acervos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return Acervos
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set editora
     *
     * @param string $editora
     *
     * @return Acervos
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;

        return $this;
    }

    /**
     * Get editora
     *
     * @return string
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * Set cadastro
     *
     * @param \DateTime $cadastro
     *
     * @return Acervos
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;

        return $this;
    }

    /**
     * Get cadastro
     *
     * @return \DateTime
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Acervos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getNomeStatus()
    {
        if (1 == $this->status) {
            return 'Ativo';
        } else {
            return 'Inativo';
        }
    }
}

