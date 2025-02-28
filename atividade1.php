    <?php

    class Aluno {
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;
        public $media;

        public function __construct($nome, $nota1, $nota2, $nota3) {
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
            $this->nota3 = $nota3;
            $this->calculoMedia();
        }

        public function calculoMedia() {
            $this->media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        }

        public function Aprovado() {
            if ($this->media >= 7) {
                return "<h2>Parabéns {$this->nome}, sua topeira, você passou!</h2>";
            } else {
                return "<h2>Eh, {$this->nome}, se fudeu, estude mais no próximo semestre.</h2>";
            }
        }
    }

    $aluno = new Aluno("Toupeira Junior dos Santos", 5, 6, 8);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 1</title>
    </head>
    <body>
        <!-- decidi deixar mais arrumadinho -->
        <div class="container">
            <h1>Vamos aos resultados</h1><br/>    
            <h2>Nome: <?php echo $aluno->nome; ?></h2><br/>
            <h2>Média: <?php echo $aluno->media; ?></h2><br/>
            <h2>Resultado: <?php echo $aluno->Aprovado(); ?></h2><br/>
        </div>
    </body>
    </html>