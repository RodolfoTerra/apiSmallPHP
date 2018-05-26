<?php 

	namespace App\Model;

	/**
	 * @Entity
	 * @Table(name="teste")
	 */

	use Doctrine\ORM\EntityRepository;
	use Doctrine\ORM\Mapping as ORM;
	use \App\Model\Base as ConnectBase;

	/**
	 * @ORM\Entity @ORM\Table(name="teste")
	 **/

	class Teste
	{

		/**
		*	@var integer @id
		*		@Column(name="id", type="integer")
		*		@GenerateValue(strategy="AUTO")
		*/
		private $testeId;

		/**
		*
		*	@var string @Column(name="nome", type="string", length=255)
		*/
		private $testeNome;


		function __construct ($testeId=0, $testeNome="")
		{

			$this->testeId = $testeId;
			$this->testeNome = $testeNome;
		}


	    public function getTesteId()
	    {
	        return $this->testeId;
	    }


	    public function getTesteNome()
	    {
	        return $this->testeNome;
	    }


	    public function setTesteNome($testeNome)
	    {
	        $this->testeNome = $testeNome;
	    }


		public function setTeste($query)
		{
			$bd = new ConnectBase;

			return $bd->persistModel($query);
		}
	}
