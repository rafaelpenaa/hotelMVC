<?php

include_once 'models/Task.php';

class TaskController {
    private $db;
    private $task;

    public function __construct($db) {
        $this->db = $db;
        $this->task = new Task($db);
    }

    // Método para criar um novo usuário
    public function create($tarefa, $prazo) {
        $this->task->tarefa = $tarefa;
        $this->task->prazo = $prazo;

        if($this->task->create()) {
            return "Tarefa criada.";
        } else {
            return "Não foi possível criar Tarefa.";
        }
    }

    // Método para obter detalhes de um usuário pelo ID
    public function readOne($id) {
        $this->task->id = $id;
        $this->task->readOne();

        if($this->task->tarefa != null) {
            // Cria um array associativo com os detalhes do usuário
            $task_arr = array(
                "id" => $this->task->id,
                "tarefa" => $this->task->tarefa,
                "prazo" => $this->task->prazo
            );
            return $task_arr;
        } else {
            return "Tarefa não localizada.";
        }
    }

    // Método para atualizar os dados de um usuário
    public function update($id, $tarefa, $prazo) {
        $this->task->id = $id;
        $this->task->tarefa = $tarefa;
        $this->task->prazo = $prazo;

        if($this->task->update()) {
            return "Tarefa atualizada.";
        } else {
            return "Não foi possível atualizar a Tarefa.";
        }
    }

    // Método para excluir um usuário pelo ID
    public function delete($id) {
        $this->task->id = $id;

        if($this->task->delete()) {
            return "Tarefa foi excluída.";
        } else {
            return "Nao foi possível excluir Tarefa.";
        }
    }
    public function index() {
        return $this->readAll();
    }
    
    // Método para listar todos os usuários (exemplo adicional)
    public function readAll() {
        $query = "SELECT id, tarefa, prazo FROM " . $this->task->table_name;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $tasks;
    }
}
?>
