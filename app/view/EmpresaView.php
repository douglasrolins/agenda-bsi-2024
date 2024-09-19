<?php
class EmpresaView
{

    // Formulário de cadastro da empresa
    public function showFormEmpresa()
    {

        echo "
        <h3>Nova Empresa</h3>
        <form action='?route=empresa' method='post' enctype='multipart/form-data'>
            <input type='hidden' name='action' value='create'>
            <div>
                <label for='nome'>Nome:</label>
                <input type='text' id='nome' name='nome' required>
            </div>
            <div>
                <label for='cnpj'>CNPJ:</label>
                <input type='text' id='cnpj' name='cnpj'>
            </div>
            <div>
                <label for='endereco'>Endereço:</label>
                <input type='text' id='endereco' name='endereco'>
            </div>
            <div>
                <label for='telefone'>Telefone:</label>
                <input type='text' id='telefone' name='telefone'>
            </div>
            <button type='submit'>Cadastrar</button>
        </form>
        ";
    }


    // Formulário de edição da empresa
    public function showEditEmpresa() {}

    // Página inicial de Empresas (listagem)
    public function listEmpresas($empresas) {

        echo "<div style='place-items: center; display: grid;' >";
        echo "<button type='submit' onclick=\"window.location.href='?route=empresa&action=create'\">Inserir Empresa</button>";
        echo "<h3>Lista de Empresas</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>CNPJ</th><th>Endereço</th><th>Telefone</th><th>Ações</th></tr>";
        foreach ($empresas as $empresa) {
            echo "<tr>";
            echo "<td>{$empresa->getNome()}</td>";
            echo "<td>{$empresa->getCNPJ()}</td>";
            echo "<td>{$empresa->getEndereco()}</td>";
            echo "<td>{$empresa->getTelefone()}</td>";
            echo "<td><a href='?route=empresa&action=update&id={$empresa->getId()}'>Editar</a> <a href='?route=empresa&action=delete&id={$empresa->getId()}' onclick='return confirmarExclusao()'>Apagar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";

    }
}
