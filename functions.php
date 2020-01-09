<?php
class word{
	protected $id;
	private $word;
	private $definition;
	private $synonyme;
	private $antonyme;
	private $arabic;
	private $french;
	private $audio;

	/*public function __construct($id,$w,$d,$s,$a,$ar,$fr,$aud){
		$this->id=$id;
		$this->word=$w;
		$this->definition=$d;
		$this->synonyme=$s;
		$this->antonyme=$a;
		$this->arabic=$ar;
		$this->french=$fr;
		$this->audio=$aud;
	}*/
	public function addWord($w,$d,$s,$a,$ar,$fr,$aud,$conn){
		$sql="Insert into words (id,word,definition,synonyme,antonyme,arabic,french,audio) 
				VALUES
				('','$w','$d','$s','$a','$ar','$fr','$aud')";
		$req=$conn->prepare($sql);
		$req->execute();
	}
	public function updateWord($id,$w,$d,$s,$a,$ar,$fr,$aud,$pdo){
		$sql="Update words set word=$w,definitio=$d,synonyme=$s,antonyme=$a,arabic=$ar,french=$fr,audio=$aud 
				WHERE
				id=$id";
		$req=$conn->prepare($sql);
		$req->execute();
	}
	public function deleteWord($id,$w,$pdo){
		$sql="Delete from words WHERE id=$id";
		$req=$conn->prepare($sql);
		$req->execute();
	}
	public function alert($message){
	echo "<script type='text/javascript'>alert('".$message."'); 
			window.location = 'index';
			</script>";
}


}
function stringonly($word){
	return $string=preg_replace('/[^a-zA-Z]/','',$word);
}

?>