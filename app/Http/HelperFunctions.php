<?php

function cpf_generate()
{
    $num = array();
    $num[9] = $num[10] = $num[11] = 0;
    for ($w = 0; $w > -2; $w--) {
        for ($i = $w; $i < 9; $i++) {
            $x = ($i - 10) * -1;
            $w == 0 ? $num[$i] = rand(0, 9) : '';
            echo ($w == 0 ? $num[$i] : '');
            ($w == -1 && $i == $w && $num[11] == 0) ?
                $num[11] += $num[10] * 2    :
                $num[10 - $w] += $num[$i - $w] * $x;
        }
        $num[10 - $w] = (($num[10 - $w] % 11) < 2 ? 0 : (11 - ($num[10 - $w] % 11)));
        echo $num[10 - $w];
    }
    return $num[0] . $num[1] . $num[2] . '.' . $num[3] . $num[4] . $num[5] . '.' . $num[6] . $num[7] . $num[8] . '-' . $num[10] . $num[11];
}

function clear_cpf($cpf)
{
    $clearCpf = preg_replace('/\D/', '', $cpf);
    if (strlen($clearCpf) === 11) {
        return $clearCpf;
    } else {
        return false;
    }
}

function clear_telephone_number($number)
{
    $clearNumber = preg_replace('/\D/', '', $number);

    return $clearNumber;
}
function format_cpf($cpf)
{
    $part_one     = substr($cpf, 0, 3);
    $part_two   = substr($cpf, 3, 3);
    $part_tree   = substr($cpf, 6, 3);
    $part_four = substr($cpf, 9, 2);

    $concat = "$part_one.$part_two.$part_tree-$part_four";

    return $concat;
}

function format_telephone_number($telephoneNumber)
{
    $telephoneNumber = preg_replace('/\D/', '', $telephoneNumber);
    $changeMask = (strlen($telephoneNumber) == 11) ? '(##) #####-####' : '(##) ####-####';

    $value = '';
    $maskPos = 0;

    for ($i = 0; $i < strlen($changeMask); $i++) {
        if ($changeMask[$i] == '#') {
            if (isset($telephoneNumber[$maskPos])) {
                $value .= $telephoneNumber[$maskPos++];
            }
        } else {
            if (isset($changeMask[$i])) {
                $value .= $changeMask[$i];
            }
        }
    }

    return $value;
}

function format_coin_number($value)
{
    $source = array('.', ',');
    $replace = array('', '.');
    $coin = str_replace($source, $replace, $value);
    return $coin;
}

function active_return($active)
{

    if ($active) {
        echo '<span class="badge bg-label-success me-1">Ativo</span>';
    }

    if (!$active) {
        echo '<span class="badge bg-label-danger me-1">Inativo</span>';
    }
}

function first_name_explode($name)
{
    $firstName = explode(' ', $name);

    return $firstName[0];
}

function first_and_last_name_explode($name)
{
    $firstName = substr($name, 0, strpos($name, ' '));

    $lastName = trim(str_replace($firstName, '', $name));

    return $firstName . " " . $lastName;
}

function select_product($subscriber_id, $free_client_id, $loop)
{

    if (!is_null($free_client_id)) {
        return $loop->freeClient->product->name;
    }
    if (!is_null($subscriber_id)) {
        return $loop->subscriber->product->name;
    }
}

function status_return($status)
{
    if ($status == 'active') {
        echo '<span class="badge bg-label-success">Ativo</span>';
    }

    if ($status == 'inative') {
        echo '<span class="badge bg-label-danger">Inativo</span>';
    }

    if ($status == 'pending') {
        echo '<span class="badge bg-label-warning">Pendente</span>';
    }
}

function check_role_hierarchy($roles)
{
    $cont = sizeof($roles) - 1;
    return $roles[$cont]->code;
}

function check_sex($sex)
{
    if ($sex == "F") {
        return "Feminino";
    }

    if ($sex == "M") {
        return "Masculino";
    }

    if (is_null($sex) || empty($sex)) {
        return "Não especificado";
    }
}

function telephone_number_format($number)
{
    return preg_replace("/[^0-9]/", "", $number);
}

function text_to_upper($text)
{
    return strtoupper($text);
}

function change_status_subscription($status)
{
    if ($status == "active") {
        return "ativa";
    }

    if ($status == "inative") {
        return "inativa";
    }

    if ($status == "pending") {
        return "pendente";
    }

    if ($status == "canceled") {
        return "cancelada";
    }
}

function change_badge($status)
{

    switch ($status) {
        case 'active':
            return "badge badge-success";
            break;

        case 'pending':
            return "badge badge-warning";
            break;

        case 'inative':
            return "badge badge-secondary";
            break;

        case 'canceled':
            return "badge badge-danger";
            break;
    }
    return $status == 'active' ?: "badge badge-danger";
}

function check_invoice_status($status)
{
    if ($status == "paid") {
        return "paga";
    }

    if ($status == "open") {
        return "em aberto";
    }
}

function verify_type_client($subscriber, $free_client)
{
    if (!is_null($subscriber)) {
        return $subscriber->product->name;
    }

    if (!is_null($free_client)) {
        return $free_client->product->name;
    }
}

function date_format_to_usd($date)
{
    return date("Y-m-d", strtotime($date));
}

function date_format_to_brl($date)
{
    return date("d/m/Y", strtotime($date));
}

function return_type_free_client_name($type)
{
    if ($type == "courtesy") {
        return "Cortesia";
    }

    if ($type == "employee") {
        return "Funcionário";
    }
}

function getAge($date)
{
    $from = new DateTime($date);
    $to   = new DateTime('today');
    return $from->diff($to)->y;
}

function select_categorie($subscriber_id, $free_client_id, $holder_id)
{
    if (!is_null($holder_id)) {
        return "Dependente";
    }

    if (!is_null($free_client_id)) {
        return "Gratuidade";
    }

    if (!is_null($subscriber_id)) {
        return "Assinante";
    }
}

function select_badge_categorie($subscriber_id, $free_client_id, $holder_id)
{
    if (!is_null($holder_id)) {
        return "badge badge-success";
    }

    if (!is_null($free_client_id)) {
        return "badge badge-warning";
    }

    if (!is_null($subscriber_id)) {
        return "badge badge-primary";
    }
}

function brl_value($value)
{
    return number_format($value, 2, ',', '.');
}

function check_loyalty($productName)
{
    if ($productName == "+Saúde Individual" || "+Saúde Familiar") {
        return true;
    }

    return false;
}

function checkAvaliableDependents($avaliable, $registered)
{
    $result = $avaliable - $registered;

    return $result > 0 ? true : false;
}

function type_billing_period($product)
{
    switch ($product) {
        case 'yearly':
            return 'ano';
            break;
        case 'monthly':
            return 'mês';
            break;
        case 'quarterly':
            return 'trimestral';
            break;
        default:
            break;
    }
}

function change_pending_dependent_type($type)
{

    if ($type == 'pending_deleted') {
        echo '<span class="badge badge-danger">Remoção</span>';
    }

    if ($type == 'pending_active') {
        echo '<span class="badge badge-warning">Ativação</span>';
    }
}

function calculatePercentage($part, $total)
{
    $percentage = ($part / $total) * 100;

    return $percentage;
}

function generateRandomAddress() {
    // Arrays with simulated data
    $streets = ['Rua A', 'Rua B', 'Rua C', 'Avenida X', 'Avenida Y', 'Travessa Z'];
    $neighborhoods = ['Centro', 'Bairro 1', 'Bairro 2', 'Bairro 3'];
    $cities = ['Cidade A', 'Cidade B', 'Cidade C'];
    $states = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'];
    $zipCode = mt_rand(10000, 99999) . '-' . mt_rand(100, 999);

    // Choose a random value from each array
    $randomStreet = $streets[array_rand($streets)];
    $randomNeighborhood = $neighborhoods[array_rand($neighborhoods)];
    $randomCity = $cities[array_rand($cities)];
    $randomState = $states[array_rand($states)];

    // Build the random address
    $randomAddress = [
        'street' => $randomStreet,
        'neighborhood' => $randomNeighborhood,
        'city' => $randomCity,
        'state' => $randomState,
        'zipCode' => $zipCode,
    ];

    return $randomAddress;
}

function generateRandomNumber($length = 6, $str) {
    $randomString = $str->random($length);

    // Converte a string aleatória para um número inteiro
    $randomNumber = intval($randomString);

    return $randomNumber;
}
