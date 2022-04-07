Class Pessoa{
		public $nome;
		public $idade;
		
		public function _construct($nome, $idade){
			$this-> nome = $nome;
			$this-> idade = $idade;
		}
		public function printNomeEIdade(){
			echo $this->nome;
			echo ‘<br>’;
			echo $this->idade;
		}
	}
	$pessoa = new Pessoa(‘gulherme’, ‘26’);
	$pessoa -> printNomeEIdade();

