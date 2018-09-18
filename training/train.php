<?php
// FANNを生成
$num_layers = 3;
$num_input = 64;
$num_neuros_hidden = 3;
$num_output = 2;
$ann = fann_create_standard(
    $num_layers, $num_input,
    $num_neuros_hidden, $num_output
);

if (!$ann) {
    die('FANNの初期化に失敗');
}

fann_set_activation_function_hidden($ann, FANN_SIGMOID_SYMMETRIC);
fann_set_activation_function_output($ann, FANN_SIGMOID_SYMMETRIC);

echo '学習します\n';
$desired_error = 0.0001;
$max_epochs = 500000;
$epochs_between_reports = 1000;
