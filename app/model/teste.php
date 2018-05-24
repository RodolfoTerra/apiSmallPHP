<?php 

	namespace App\Model;

	/**
	 * @Entity
	 * @Table(name="teste_one")
	 */

	class Teste
	{
		/**
		*	@var integer @id
		*		@Column(name="id", type="integer")
		*		@GenerateValue(strategy="AUTO")
		*/

		private $id;

		/**
		*
		*	@var string @Column(type="string", length=255)
		*/
		
		private $nome;

		function __construct ($id=0, $nome="")
		{
			$this->id = $id;
			$this->nome = $nome;

		}
	}
