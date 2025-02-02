<?php

class Cliente extends Model
{

    public function buscarCliente($email)
    {
        $sql =  "SELECT * FROM tbl_cliente WHERE email_cliente = :email AND status_cliente = 'Ativo'  ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getListarCliente()
    {
        $sql = "SELECT * FROM tbl_cliente;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCliente($dados)
    {
        $sql = "INSERT INTO tbl_cliente (
                    nome_cliente,
                    tipo_cliente,
                    cpf_cnpj_cliente,
                    data_nasc_cliente,
                    email_cliente,
                    senha_cliente,
                    foto_cliente,
                    alt_foto_cliente,
                    telefone_cliente,
                    endereco_cliente,
                    bairro_cliente,
                    cidade_cliente,
                    id_uf,
                    status_cliente
                ) VALUES (
                    :nome_cliente,
                    :tipo_cliente,
                    :cpf_cnpj_cliente,
                    :data_nasc_cliente,
                    :email_cliente,
                    :senha_cliente,
                    :foto_cliente,
                    :alt_foto_cliente,
                    :telefone_cliente,
                    :endereco_cliente,
                    :bairro_cliente,
                    :cidade_cliente,
                    :id_uf,
                    :status_cliente
                )";
    
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':nome_cliente', $dados['nome_cliente']);
        $stmt->bindValue(':tipo_cliente', $dados['tipo_cliente']);
        $stmt->bindValue(':cpf_cnpj_cliente', $dados['cpf_cnpj_cliente']);
        $stmt->bindValue(':data_nasc_cliente', $dados['data_nasc_cliente']);
        $stmt->bindValue(':email_cliente', $dados['email_cliente']);
        $stmt->bindValue(':senha_cliente', $dados['senha_cliente']);
        $stmt->bindValue(':foto_cliente', $dados['foto_cliente']);
        $stmt->bindValue(':alt_foto_cliente', $dados['alt_foto_cliente']);
        $stmt->bindValue(':telefone_cliente', $dados['telefone_cliente']);
        $stmt->bindValue(':endereco_cliente', $dados['endereco_cliente']);
        $stmt->bindValue(':bairro_cliente', $dados['bairro_cliente']);
        $stmt->bindValue(':cidade_cliente', $dados['cidade_cliente']);
        $stmt->bindValue(':id_uf', $dados['id_uf']);
        $stmt->bindValue(':status_cliente', $dados['status_cliente']);
    
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    
}
