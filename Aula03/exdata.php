<?php 

$pessoas = [
	[
		'nome' => 'Heath Ledger',
		'data_nasc' => '19/05/1956',
	],
	[
		'nome' => 'Alfie Allen',
		'data_nasc' => '10/07/1993',
	],
	[
		'nome' => 'Taylor Kinney',
		'data_nasc' => '04/09/1979',
	],
	[
		'nome' => 'Audrey Hepburn',
		'data_nasc' => '13/07/1972',
	],
];


echo '<pre>';
foreach ($pessoas as $key => $pessoa) {
	$pessoa['data_nasc'] = DateTime::createFromFormat('d/m/Y', $pessoa['data_nasc']);
	$pessoas[$key] = $pessoa;
}

$novo = $pessoas[0];
$velho = $pessoas[0];
print_r($novo);
foreach ($pessoas as $pessoa) {
	if ($pessoa['data_nasc'] > $novo['data_nasc']) {
		$novo = $pessoa;
	}
	if ($pessoa['data_nasc'] < $velho['data_nasc']) {
		$velho = $pessoa;
	}
}

echo '<hr>';

echo "Mais novo: " . $novo['nome'];

echo '<hr>';

echo "Mais velho: " . $velho['nome'];

echo '<hr>';

$diferenca = $velho['data_nasc'] -> diff($novo['data_nasc']);

echo $diferenca -> format('%r%a dias de diferença');