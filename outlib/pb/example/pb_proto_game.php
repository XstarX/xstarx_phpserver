<?php
class Game_PlayerTemp extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["21"] = "PBInt";
    $this->values["21"] = "";
    $this->fields["22"] = "PBInt";
    $this->values["22"] = "";
    $this->fields["23"] = "PBInt";
    $this->values["23"] = "";
    $this->fields["24"] = "PBInt";
    $this->values["24"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "PBInt";
    $this->values["9"] = "";
    $this->fields["10"] = "PBInt";
    $this->values["10"] = "";
    $this->fields["11"] = "PBInt";
    $this->values["11"] = "";
    $this->fields["12"] = "PBInt";
    $this->values["12"] = "";
    $this->fields["13"] = "PBInt";
    $this->values["13"] = "";
    $this->fields["14"] = "PBInt";
    $this->values["14"] = "";
    $this->fields["15"] = "PBInt";
    $this->values["15"] = "";
    $this->fields["16"] = "PBInt";
    $this->values["16"] = "";
    $this->fields["17"] = "PBInt";
    $this->values["17"] = "";
    $this->fields["18"] = "PBInt";
    $this->values["18"] = "";
    $this->fields["19"] = "PBInt";
    $this->values["19"] = "";
    $this->fields["20"] = "PBInt";
    $this->values["20"] = "";
    $this->fields["25"] = "PBInt";
    $this->values["25"] = "";
    $this->fields["26"] = "PBInt";
    $this->values["26"] = "";
    $this->fields["27"] = "PBInt";
    $this->values["27"] = array();
  }
  function player_id()
  {
    return $this->_get_value("1");
  }
  function set_player_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function in_attack()
  {
    return $this->_get_value("2");
  }
  function set_in_attack($value)
  {
    return $this->_set_value("2", $value);
  }
  function out_attack()
  {
    return $this->_get_value("3");
  }
  function set_out_attack($value)
  {
    return $this->_set_value("3", $value);
  }
  function in_defense()
  {
    return $this->_get_value("4");
  }
  function set_in_defense($value)
  {
    return $this->_set_value("4", $value);
  }
  function out_defense()
  {
    return $this->_get_value("5");
  }
  function set_out_defense($value)
  {
    return $this->_set_value("5", $value);
  }
  function assist_rate()
  {
    return $this->_get_value("6");
  }
  function set_assist_rate($value)
  {
    return $this->_set_value("6", $value);
  }
  function co_defense()
  {
    return $this->_get_value("7");
  }
  function set_co_defense($value)
  {
    return $this->_set_value("7", $value);
  }
  function attack_way()
  {
    return $this->_get_value("21");
  }
  function set_attack_way($value)
  {
    return $this->_set_value("21", $value);
  }
  function foul_trend()
  {
    return $this->_get_value("22");
  }
  function set_foul_trend($value)
  {
    return $this->_set_value("22", $value);
  }
  function free_throw_rate()
  {
    return $this->_get_value("23");
  }
  function set_free_throw_rate($value)
  {
    return $this->_set_value("23", $value);
  }
  function rebound_rate()
  {
    return $this->_get_value("24");
  }
  function set_rebound_rate($value)
  {
    return $this->_set_value("24", $value);
  }
  function points()
  {
    return $this->_get_value("8");
  }
  function set_points($value)
  {
    return $this->_set_value("8", $value);
  }
  function two_point_shot()
  {
    return $this->_get_value("9");
  }
  function set_two_point_shot($value)
  {
    return $this->_set_value("9", $value);
  }
  function two_point_bingo()
  {
    return $this->_get_value("10");
  }
  function set_two_point_bingo($value)
  {
    return $this->_set_value("10", $value);
  }
  function three_point_shot()
  {
    return $this->_get_value("11");
  }
  function set_three_point_shot($value)
  {
    return $this->_set_value("11", $value);
  }
  function three_point_bingo()
  {
    return $this->_get_value("12");
  }
  function set_three_point_bingo($value)
  {
    return $this->_set_value("12", $value);
  }
  function free_throw()
  {
    return $this->_get_value("13");
  }
  function set_free_throw($value)
  {
    return $this->_set_value("13", $value);
  }
  function free_throw_bingo()
  {
    return $this->_get_value("14");
  }
  function set_free_throw_bingo($value)
  {
    return $this->_set_value("14", $value);
  }
  function rebounds()
  {
    return $this->_get_value("15");
  }
  function set_rebounds($value)
  {
    return $this->_set_value("15", $value);
  }
  function assists()
  {
    return $this->_get_value("16");
  }
  function set_assists($value)
  {
    return $this->_set_value("16", $value);
  }
  function steals()
  {
    return $this->_get_value("17");
  }
  function set_steals($value)
  {
    return $this->_set_value("17", $value);
  }
  function blocks()
  {
    return $this->_get_value("18");
  }
  function set_blocks($value)
  {
    return $this->_set_value("18", $value);
  }
  function fouls()
  {
    return $this->_get_value("19");
  }
  function set_fouls($value)
  {
    return $this->_set_value("19", $value);
  }
  function prop()
  {
    return $this->_get_value("20");
  }
  function set_prop($value)
  {
    return $this->_set_value("20", $value);
  }
  function left_round()
  {
    return $this->_get_value("25");
  }
  function set_left_round($value)
  {
    return $this->_set_value("25", $value);
  }
  function position()
  {
    return $this->_get_value("26");
  }
  function set_position($value)
  {
    return $this->_set_value("26", $value);
  }
  function buffs($offset)
  {
    $v = $this->_get_arr_value("27", $offset);
    return $v->get_value();
  }
  function append_buffs($value)
  {
    $v = $this->_add_arr_value("27");
    $v->set_value($value);
  }
  function set_buffs($index, $value)
  {
    $v = new $this->fields["27"]();
    $v->set_value($value);
    $this->_set_arr_value("27", $index, $v);
  }
  function remove_last_buffs()
  {
    $this->_remove_last_arr_value("27");
  }
  function buffs_size()
  {
    return $this->_get_arr_size("27");
  }
}
class Game extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "PBInt";
    $this->values["9"] = "";
    $this->fields["10"] = "PBInt";
    $this->values["10"] = "";
    $this->fields["11"] = "Game_PlayerTemp";
    $this->values["11"] = array();
    $this->fields["12"] = "Game_PlayerTemp";
    $this->values["12"] = array();
    $this->fields["13"] = "PBInt";
    $this->values["13"] = "";
    $this->fields["14"] = "PBInt";
    $this->values["14"] = "";
  }
  function round()
  {
    return $this->_get_value("1");
  }
  function set_round($value)
  {
    return $this->_set_value("1", $value);
  }
  function max_round()
  {
    return $this->_get_value("2");
  }
  function set_max_round($value)
  {
    return $this->_set_value("2", $value);
  }
  function host()
  {
    return $this->_get_value("3");
  }
  function set_host($value)
  {
    return $this->_set_value("3", $value);
  }
  function guest()
  {
    return $this->_get_value("4");
  }
  function set_guest($value)
  {
    return $this->_set_value("4", $value);
  }
  function host_points()
  {
    return $this->_get_value("5");
  }
  function set_host_points($value)
  {
    return $this->_set_value("5", $value);
  }
  function guest_points()
  {
    return $this->_get_value("6");
  }
  function set_guest_points($value)
  {
    return $this->_set_value("6", $value);
  }
  function host_attack_tactic()
  {
    return $this->_get_value("7");
  }
  function set_host_attack_tactic($value)
  {
    return $this->_set_value("7", $value);
  }
  function host_defense_tactic()
  {
    return $this->_get_value("8");
  }
  function set_host_defense_tactic($value)
  {
    return $this->_set_value("8", $value);
  }
  function guest_attack_tactic()
  {
    return $this->_get_value("9");
  }
  function set_guest_attack_tactic($value)
  {
    return $this->_set_value("9", $value);
  }
  function guest_defense_tactic()
  {
    return $this->_get_value("10");
  }
  function set_guest_defense_tactic($value)
  {
    return $this->_set_value("10", $value);
  }
  function host_players($offset)
  {
    return $this->_get_arr_value("11", $offset);
  }
  function add_host_players()
  {
    return $this->_add_arr_value("11");
  }
  function set_host_players($index, $value)
  {
    $this->_set_arr_value("11", $index, $value);
  }
  function remove_last_host_players()
  {
    $this->_remove_last_arr_value("11");
  }
  function host_players_size()
  {
    return $this->_get_arr_size("11");
  }
  function guest_players($offset)
  {
    return $this->_get_arr_value("12", $offset);
  }
  function add_guest_players()
  {
    return $this->_add_arr_value("12");
  }
  function set_guest_players($index, $value)
  {
    $this->_set_arr_value("12", $index, $value);
  }
  function remove_last_guest_players()
  {
    $this->_remove_last_arr_value("12");
  }
  function guest_players_size()
  {
    return $this->_get_arr_size("12");
  }
  function host_rebound()
  {
    return $this->_get_value("13");
  }
  function set_host_rebound($value)
  {
    return $this->_set_value("13", $value);
  }
  function guest_rebound()
  {
    return $this->_get_value("14");
  }
  function set_guest_rebound($value)
  {
    return $this->_set_value("14", $value);
  }
}
class GameOneRoundResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "PBInt";
    $this->values["9"] = "";
    $this->fields["10"] = "PBInt";
    $this->values["10"] = "";
    $this->fields["11"] = "PBInt";
    $this->values["11"] = "";
    $this->fields["12"] = "PBInt";
    $this->values["12"] = "";
    $this->fields["13"] = "PBInt";
    $this->values["13"] = "";
    $this->fields["14"] = "PBInt";
    $this->values["14"] = "";
    $this->fields["15"] = "PBInt";
    $this->values["15"] = "";
    $this->fields["16"] = "PBInt";
    $this->values["16"] = "";
    $this->fields["17"] = "PBInt";
    $this->values["17"] = "";
    $this->fields["18"] = "PBInt";
    $this->values["18"] = "";
    $this->fields["19"] = "PBInt";
    $this->values["19"] = "";
    $this->fields["20"] = "PBInt";
    $this->values["20"] = "";
    $this->fields["21"] = "PBInt";
    $this->values["21"] = "";
    $this->fields["22"] = "PBInt";
    $this->values["22"] = "";
    $this->fields["23"] = "PBInt";
    $this->values["23"] = "";
    $this->fields["24"] = "PBInt";
    $this->values["24"] = "";
    $this->fields["25"] = "PBInt";
    $this->values["25"] = "";
    $this->fields["26"] = "PBInt";
    $this->values["26"] = "";
    $this->fields["27"] = "PBInt";
    $this->values["27"] = "";
    $this->fields["28"] = "PBInt";
    $this->values["28"] = "";
    $this->fields["29"] = "PBInt";
    $this->values["29"] = "";
    $this->fields["30"] = "PBInt";
    $this->values["30"] = array();
    $this->fields["31"] = "PBInt";
    $this->values["31"] = array();
  }
  function round()
  {
    return $this->_get_value("1");
  }
  function set_round($value)
  {
    return $this->_set_value("1", $value);
  }
  function attacker()
  {
    return $this->_get_value("2");
  }
  function set_attacker($value)
  {
    return $this->_set_value("2", $value);
  }
  function defender()
  {
    return $this->_get_value("3");
  }
  function set_defender($value)
  {
    return $this->_set_value("3", $value);
  }
  function a_assist()
  {
    return $this->_get_value("4");
  }
  function set_a_assist($value)
  {
    return $this->_set_value("4", $value);
  }
  function a_foul()
  {
    return $this->_get_value("5");
  }
  function set_a_foul($value)
  {
    return $this->_set_value("5", $value);
  }
  function d_foul()
  {
    return $this->_get_value("6");
  }
  function set_d_foul($value)
  {
    return $this->_set_value("6", $value);
  }
  function a_rebound()
  {
    return $this->_get_value("7");
  }
  function set_a_rebound($value)
  {
    return $this->_set_value("7", $value);
  }
  function d_rebound()
  {
    return $this->_get_value("8");
  }
  function set_d_rebound($value)
  {
    return $this->_set_value("8", $value);
  }
  function d_block()
  {
    return $this->_get_value("9");
  }
  function set_d_block($value)
  {
    return $this->_set_value("9", $value);
  }
  function a_point()
  {
    return $this->_get_value("10");
  }
  function set_a_point($value)
  {
    return $this->_set_value("10", $value);
  }
  function a_pointer()
  {
    return $this->_get_value("11");
  }
  function set_a_pointer($value)
  {
    return $this->_set_value("11", $value);
  }
  function d_point()
  {
    return $this->_get_value("12");
  }
  function set_d_point($value)
  {
    return $this->_set_value("12", $value);
  }
  function d_pointer()
  {
    return $this->_get_value("13");
  }
  function set_d_pointer($value)
  {
    return $this->_set_value("13", $value);
  }
  function a_miss()
  {
    return $this->_get_value("14");
  }
  function set_a_miss($value)
  {
    return $this->_set_value("14", $value);
  }
  function d_miss()
  {
    return $this->_get_value("15");
  }
  function set_d_miss($value)
  {
    return $this->_set_value("15", $value);
  }
  function a_steal()
  {
    return $this->_get_value("16");
  }
  function set_a_steal($value)
  {
    return $this->_set_value("16", $value);
  }
  function d_steal()
  {
    return $this->_get_value("17");
  }
  function set_d_steal($value)
  {
    return $this->_set_value("17", $value);
  }
  function result()
  {
    return $this->_get_value("18");
  }
  function set_result($value)
  {
    return $this->_set_value("18", $value);
  }
  function a_fthrow()
  {
    return $this->_get_value("19");
  }
  function set_a_fthrow($value)
  {
    return $this->_set_value("19", $value);
  }
  function a_fthrow_bingo()
  {
    return $this->_get_value("20");
  }
  function set_a_fthrow_bingo($value)
  {
    return $this->_set_value("20", $value);
  }
  function a_way()
  {
    return $this->_get_value("21");
  }
  function set_a_way($value)
  {
    return $this->_set_value("21", $value);
  }
  function d_way()
  {
    return $this->_get_value("22");
  }
  function set_d_way($value)
  {
    return $this->_set_value("22", $value);
  }
  function da_way()
  {
    return $this->_get_value("23");
  }
  function set_da_way($value)
  {
    return $this->_set_value("23", $value);
  }
  function a_2way()
  {
    return $this->_get_value("24");
  }
  function set_a_2way($value)
  {
    return $this->_set_value("24", $value);
  }
  function sub_round()
  {
    return $this->_get_value("25");
  }
  function set_sub_round($value)
  {
    return $this->_set_value("25", $value);
  }
  function match_id()
  {
    return $this->_get_value("26");
  }
  function set_match_id($value)
  {
    return $this->_set_value("26", $value);
  }
  function a_prop()
  {
    return $this->_get_value("27");
  }
  function set_a_prop($value)
  {
    return $this->_set_value("27", $value);
  }
  function d_prop()
  {
    return $this->_get_value("28");
  }
  function set_d_prop($value)
  {
    return $this->_set_value("28", $value);
  }
  function d_codefender()
  {
    return $this->_get_value("29");
  }
  function set_d_codefender($value)
  {
    return $this->_set_value("29", $value);
  }
  function a_buff($offset)
  {
    $v = $this->_get_arr_value("30", $offset);
    return $v->get_value();
  }
  function append_a_buff($value)
  {
    $v = $this->_add_arr_value("30");
    $v->set_value($value);
  }
  function set_a_buff($index, $value)
  {
    $v = new $this->fields["30"]();
    $v->set_value($value);
    $this->_set_arr_value("30", $index, $v);
  }
  function remove_last_a_buff()
  {
    $this->_remove_last_arr_value("30");
  }
  function a_buff_size()
  {
    return $this->_get_arr_size("30");
  }
  function d_buff($offset)
  {
    $v = $this->_get_arr_value("31", $offset);
    return $v->get_value();
  }
  function append_d_buff($value)
  {
    $v = $this->_add_arr_value("31");
    $v->set_value($value);
  }
  function set_d_buff($index, $value)
  {
    $v = new $this->fields["31"]();
    $v->set_value($value);
    $this->_set_arr_value("31", $index, $v);
  }
  function remove_last_d_buff()
  {
    $this->_remove_last_arr_value("31");
  }
  function d_buff_size()
  {
    return $this->_get_arr_size("31");
  }
}
class GameBasicSet_GamePlayerSet extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
  }
  function player_id()
  {
    return $this->_get_value("1");
  }
  function set_player_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function prop_id()
  {
    return $this->_get_value("2");
  }
  function set_prop_id($value)
  {
    return $this->_set_value("2", $value);
  }
}
class GameBasicSet extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "GameBasicSet_GamePlayerSet";
    $this->values["4"] = array();
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function attack_tatic()
  {
    return $this->_get_value("2");
  }
  function set_attack_tatic($value)
  {
    return $this->_set_value("2", $value);
  }
  function defense_tatic()
  {
    return $this->_get_value("3");
  }
  function set_defense_tatic($value)
  {
    return $this->_set_value("3", $value);
  }
  function players($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_players()
  {
    return $this->_add_arr_value("4");
  }
  function set_players($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function remove_last_players()
  {
    $this->_remove_last_arr_value("4");
  }
  function players_size()
  {
    return $this->_get_arr_size("4");
  }
  function match_id()
  {
    return $this->_get_value("5");
  }
  function set_match_id($value)
  {
    return $this->_set_value("5", $value);
  }
  function round()
  {
    return $this->_get_value("6");
  }
  function set_round($value)
  {
    return $this->_set_value("6", $value);
  }
}
class PlayerAbility extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "PBInt";
    $this->values["9"] = "";
    $this->fields["10"] = "PBInt";
    $this->values["10"] = "";
    $this->fields["11"] = "PBInt";
    $this->values["11"] = "";
    $this->fields["12"] = "PBInt";
    $this->values["12"] = "";
    $this->fields["13"] = "PBInt";
    $this->values["13"] = "";
    $this->fields["14"] = "PBInt";
    $this->values["14"] = array();
  }
  function player_id()
  {
    return $this->_get_value("1");
  }
  function set_player_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function field_goal()
  {
    return $this->_get_value("2");
  }
  function set_field_goal($value)
  {
    return $this->_set_value("2", $value);
  }
  function three_point()
  {
    return $this->_get_value("3");
  }
  function set_three_point($value)
  {
    return $this->_set_value("3", $value);
  }
  function out_defense()
  {
    return $this->_get_value("4");
  }
  function set_out_defense($value)
  {
    return $this->_set_value("4", $value);
  }
  function in_defense()
  {
    return $this->_get_value("5");
  }
  function set_in_defense($value)
  {
    return $this->_set_value("5", $value);
  }
  function co_defense()
  {
    return $this->_get_value("6");
  }
  function set_co_defense($value)
  {
    return $this->_set_value("6", $value);
  }
  function foul_trend()
  {
    return $this->_get_value("7");
  }
  function set_foul_trend($value)
  {
    return $this->_set_value("7", $value);
  }
  function free_throw()
  {
    return $this->_get_value("8");
  }
  function set_free_throw($value)
  {
    return $this->_set_value("8", $value);
  }
  function attack_way()
  {
    return $this->_get_value("9");
  }
  function set_attack_way($value)
  {
    return $this->_set_value("9", $value);
  }
  function assist()
  {
    return $this->_get_value("10");
  }
  function set_assist($value)
  {
    return $this->_set_value("10", $value);
  }
  function max_round()
  {
    return $this->_get_value("11");
  }
  function set_max_round($value)
  {
    return $this->_set_value("11", $value);
  }
  function level()
  {
    return $this->_get_value("12");
  }
  function set_level($value)
  {
    return $this->_set_value("12", $value);
  }
  function position()
  {
    return $this->_get_value("13");
  }
  function set_position($value)
  {
    return $this->_set_value("13", $value);
  }
  function buffs($offset)
  {
    $v = $this->_get_arr_value("14", $offset);
    return $v->get_value();
  }
  function append_buffs($value)
  {
    $v = $this->_add_arr_value("14");
    $v->set_value($value);
  }
  function set_buffs($index, $value)
  {
    $v = new $this->fields["14"]();
    $v->set_value($value);
    $this->_set_arr_value("14", $index, $v);
  }
  function remove_last_buffs()
  {
    $this->_remove_last_arr_value("14");
  }
  function buffs_size()
  {
    return $this->_get_arr_size("14");
  }
}
class Players_Buffer extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
  }
  function buff_id()
  {
    return $this->_get_value("1");
  }
  function set_buff_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function active()
  {
    return $this->_get_value("2");
  }
  function set_active($value)
  {
    return $this->_set_value("2", $value);
  }
}
class Players_Player extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "Players_Buffer";
    $this->values["2"] = array();
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
  }
  function player_id()
  {
    return $this->_get_value("1");
  }
  function set_player_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function buffs($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_buffs()
  {
    return $this->_add_arr_value("2");
  }
  function set_buffs($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_buffs()
  {
    $this->_remove_last_arr_value("2");
  }
  function buffs_size()
  {
    return $this->_get_arr_size("2");
  }
  function active()
  {
    return $this->_get_value("3");
  }
  function set_active($value)
  {
    return $this->_set_value("3", $value);
  }
  function ability_rate()
  {
    return $this->_get_value("4");
  }
  function set_ability_rate($value)
  {
    return $this->_set_value("4", $value);
  }
  function position()
  {
    return $this->_get_value("5");
  }
  function set_position($value)
  {
    return $this->_set_value("5", $value);
  }
  function first()
  {
    return $this->_get_value("6");
  }
  function set_first($value)
  {
    return $this->_set_value("6", $value);
  }
}
class Players extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "Players_Player";
    $this->values["2"] = array();
    $this->fields["3"] = "PBInt";
    $this->values["3"] = array();
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function players($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_players()
  {
    return $this->_add_arr_value("2");
  }
  function set_players($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_players()
  {
    $this->_remove_last_arr_value("2");
  }
  function players_size()
  {
    return $this->_get_arr_size("2");
  }
  function on_court($offset)
  {
    $v = $this->_get_arr_value("3", $offset);
    return $v->get_value();
  }
  function append_on_court($value)
  {
    $v = $this->_add_arr_value("3");
    $v->set_value($value);
  }
  function set_on_court($index, $value)
  {
    $v = new $this->fields["3"]();
    $v->set_value($value);
    $this->_set_arr_value("3", $index, $v);
  }
  function remove_last_on_court()
  {
    $this->_remove_last_arr_value("3");
  }
  function on_court_size()
  {
    return $this->_get_arr_size("3");
  }
}
class GameInitResult extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function opponent()
  {
    return $this->_get_value("2");
  }
  function set_opponent($value)
  {
    return $this->_set_value("2", $value);
  }
  function attack()
  {
    return $this->_get_value("3");
  }
  function set_attack($value)
  {
    return $this->_set_value("3", $value);
  }
}
class GameResults_PlayerStatis extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
    $this->fields["8"] = "PBInt";
    $this->values["8"] = "";
    $this->fields["9"] = "PBInt";
    $this->values["9"] = "";
    $this->fields["10"] = "PBInt";
    $this->values["10"] = "";
    $this->fields["11"] = "PBInt";
    $this->values["11"] = "";
    $this->fields["12"] = "PBInt";
    $this->values["12"] = "";
    $this->fields["13"] = "PBInt";
    $this->values["13"] = "";
  }
  function points()
  {
    return $this->_get_value("1");
  }
  function set_points($value)
  {
    return $this->_set_value("1", $value);
  }
  function two_point_shot()
  {
    return $this->_get_value("2");
  }
  function set_two_point_shot($value)
  {
    return $this->_set_value("2", $value);
  }
  function two_point_bingo()
  {
    return $this->_get_value("3");
  }
  function set_two_point_bingo($value)
  {
    return $this->_set_value("3", $value);
  }
  function three_point_shot()
  {
    return $this->_get_value("4");
  }
  function set_three_point_shot($value)
  {
    return $this->_set_value("4", $value);
  }
  function three_point_bingo()
  {
    return $this->_get_value("5");
  }
  function set_three_point_bingo($value)
  {
    return $this->_set_value("5", $value);
  }
  function free_throw()
  {
    return $this->_get_value("6");
  }
  function set_free_throw($value)
  {
    return $this->_set_value("6", $value);
  }
  function free_throw_bingo()
  {
    return $this->_get_value("7");
  }
  function set_free_throw_bingo($value)
  {
    return $this->_set_value("7", $value);
  }
  function rebounds()
  {
    return $this->_get_value("8");
  }
  function set_rebounds($value)
  {
    return $this->_set_value("8", $value);
  }
  function assists()
  {
    return $this->_get_value("9");
  }
  function set_assists($value)
  {
    return $this->_set_value("9", $value);
  }
  function steals()
  {
    return $this->_get_value("10");
  }
  function set_steals($value)
  {
    return $this->_set_value("10", $value);
  }
  function blocks()
  {
    return $this->_get_value("11");
  }
  function set_blocks($value)
  {
    return $this->_set_value("11", $value);
  }
  function fouls()
  {
    return $this->_get_value("12");
  }
  function set_fouls($value)
  {
    return $this->_set_value("12", $value);
  }
  function player_id()
  {
    return $this->_get_value("13");
  }
  function set_player_id($value)
  {
    return $this->_set_value("13", $value);
  }
}
class GameResults extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "GameResults_PlayerStatis";
    $this->values["4"] = array();
    $this->fields["5"] = "GameResults_PlayerStatis";
    $this->values["5"] = array();
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function points()
  {
    return $this->_get_value("2");
  }
  function set_points($value)
  {
    return $this->_set_value("2", $value);
  }
  function opponent_points()
  {
    return $this->_get_value("3");
  }
  function set_opponent_points($value)
  {
    return $this->_set_value("3", $value);
  }
  function self_statis($offset)
  {
    return $this->_get_arr_value("4", $offset);
  }
  function add_self_statis()
  {
    return $this->_add_arr_value("4");
  }
  function set_self_statis($index, $value)
  {
    $this->_set_arr_value("4", $index, $value);
  }
  function remove_last_self_statis()
  {
    $this->_remove_last_arr_value("4");
  }
  function self_statis_size()
  {
    return $this->_get_arr_size("4");
  }
  function opponent_statis($offset)
  {
    return $this->_get_arr_value("5", $offset);
  }
  function add_opponent_statis()
  {
    return $this->_add_arr_value("5");
  }
  function set_opponent_statis($index, $value)
  {
    $this->_set_arr_value("5", $index, $value);
  }
  function remove_last_opponent_statis()
  {
    $this->_remove_last_arr_value("5");
  }
  function opponent_statis_size()
  {
    return $this->_get_arr_size("5");
  }
}
class ChangePlayers_CPlayer extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
  }
  function player_id()
  {
    return $this->_get_value("1");
  }
  function set_player_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function active()
  {
    return $this->_get_value("2");
  }
  function set_active($value)
  {
    return $this->_set_value("2", $value);
  }
  function position()
  {
    return $this->_get_value("3");
  }
  function set_position($value)
  {
    return $this->_set_value("3", $value);
  }
  function first()
  {
    return $this->_get_value("4");
  }
  function set_first($value)
  {
    return $this->_set_value("4", $value);
  }
}
class ChangePlayers extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "ChangePlayers_CPlayer";
    $this->values["2"] = array();
  }
  function uid()
  {
    return $this->_get_value("1");
  }
  function set_uid($value)
  {
    return $this->_set_value("1", $value);
  }
  function players($offset)
  {
    return $this->_get_arr_value("2", $offset);
  }
  function add_players()
  {
    return $this->_add_arr_value("2");
  }
  function set_players($index, $value)
  {
    $this->_set_arr_value("2", $index, $value);
  }
  function remove_last_players()
  {
    $this->_remove_last_arr_value("2");
  }
  function players_size()
  {
    return $this->_get_arr_size("2");
  }
}
class Buff extends PBMessage
{
  var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
  public function __construct($reader=null)
  {
    parent::__construct($reader);
    $this->fields["1"] = "PBInt";
    $this->values["1"] = "";
    $this->fields["2"] = "PBInt";
    $this->values["2"] = "";
    $this->fields["3"] = "PBInt";
    $this->values["3"] = "";
    $this->fields["4"] = "PBInt";
    $this->values["4"] = "";
    $this->fields["5"] = "PBInt";
    $this->values["5"] = "";
    $this->fields["6"] = "PBInt";
    $this->values["6"] = "";
    $this->fields["7"] = "PBInt";
    $this->values["7"] = "";
  }
  function id()
  {
    return $this->_get_value("1");
  }
  function set_id($value)
  {
    return $this->_set_value("1", $value);
  }
  function buff_range()
  {
    return $this->_get_value("2");
  }
  function set_buff_range($value)
  {
    return $this->_set_value("2", $value);
  }
  function effect()
  {
    return $this->_get_value("3");
  }
  function set_effect($value)
  {
    return $this->_set_value("3", $value);
  }
  function opt()
  {
    return $this->_get_value("4");
  }
  function set_opt($value)
  {
    return $this->_set_value("4", $value);
  }
  function value()
  {
    return $this->_get_value("5");
  }
  function set_value($value)
  {
    return $this->_set_value("5", $value);
  }
  function rate()
  {
    return $this->_get_value("6");
  }
  function set_rate($value)
  {
    return $this->_set_value("6", $value);
  }
  function buff_type()
  {
    return $this->_get_value("7");
  }
  function set_buff_type($value)
  {
    return $this->_set_value("7", $value);
  }
}
?>