<?php

namespace Application\Model;

class Cliente
{
    private $id;
    private $nome;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $cidade;
    private $bairro;
    private $estado;
    private $telefone;
    private $email;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return self
     */
    private function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return self
     */
    private function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     * @return self
     */
    private function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     * @return self
     */
    private function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     * @return self
     */
    private function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     * @return self
     */
    private function setComplemento($complemento)
    {
        $this->complemento = $complemento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     * @return self
     */
    private function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     * @return self
     */
    private function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     * @return self
     */
    private function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     * @return self
     */
    private function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return self
     */
    private function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function exchangeArray(array $data)
    {
        $this->setId(isset($data['id']) ? $data['id'] : 0)
            ->setNome($data['nome'])
            ->setCep($data['cep'])
            ->setEndereco($data['endereco'])
            ->setNumero($data['numero'])
            ->setComplemento($data['complemento'])
            ->setCidade($data['cidade'])
            ->setBairro($data['bairro'])
            ->setEstado($data['estado'])
            ->setTelefone($data['telefone'])
            ->setEmail($data['email']);
    }

    public function getArrayCopy()
    {
        return [
            'id' => $this->getId(),
            'nome' => $this->getNome(),
            'cep' => $this->getCep(),
            'endereco' => $this->getEndereco(),
            'numero' => $this->getNumero(),
            'complemento' => $this->getComplemento(),
            'cidade' => $this->getCidade(),
            'bairro' => $this->getBairro(),
            'estado' => $this->getEstado(),
            'telefone' => $this->getTelefone(),
            'email' => $this->getEmail()
        ];
    }


}