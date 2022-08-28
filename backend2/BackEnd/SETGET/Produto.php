<?php
/*

-classe 
- instancias dos objetos

PSR

*/

class cliente
{
/*    public $codigo;
    public $nome;
    public $preco;   
*/
    private $cliente;
    private $codigo;
    private $nome; 
    private $cpf; 
    private $endereco;
    private $telefone; 
    private $email;  

    public function setCliente($cliente){//metodos acessores
        $this->cliente = $cliente;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setCode($codigo){//metodos acessores
        $this->codigo = $codigo;
    }

    public function getCode(){
        return $this->codigo;
    }

    public function setNome($nome){//metodos acessores
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setCpf($cpf){//metodos acessores
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }
    public function setEndereco($endereco){//metodos acessores
        $this->endereco = $endereco;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setTelefone($telefone){//metodos acessores
        $this->telefone = $telefone;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setEmail($email){//metodos acessores
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    //implementar os métodos setar e resgatar o código e preço.
}
class produto{
    private $produtos;
    private $codigo;
    private $descricao; 
    private $valorc; 
    private $valorv;
    private $quantestoq; 

    public function setProdutos($produtos){//metodos acessores
        $this->produtos = $produtos;
    }

    public function getProdutos(){
        return $this->produtos;
    }
    public function setCodep($codigo){
       $this->codigo =$codigo;
    }
    public function getCodep(){
        return $this->codigo;
    }
    public function setDescricao($descricao){
        $this->descricao =$descricao;
    }
    public function getDescricao(){
        return $this ->descricao;
    }
    public function setValorc($valorc){
        $this ->valorc =$valorc;
    }
    public function getValorc(){
        return $this -> valorc;
    }
    public function setValorv($valorv){
        $this -> valorv = $valorv;
    }
    public function getValorv(){
        return $this -> valorv;
    }
    public function setQuantestoque($quantestoq){
        $this -> quantestoq =$quantestoq;
    }
    public function getQuantestoque(){
        return $this -> quantestoq;
    }

}