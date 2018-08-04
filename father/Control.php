<?

class Control{

	private static $control;
	private static $action;
	private $smarty;

	public function __construct()
	{
		$this->smarty = new Smarty();
		// 模板文件存放的目录在view
		$this->smarty->template_dir = 'view';
	}

	static function run()
	{
		// isset() 判断是不是有值，有传值就显示具体的控制器，没有就默认传Jdsx控制器
		self::$control = $control_m = isset($_REQUEST['control']) ? $_REQUEST['control'] : 'Jdsx';
		// 有传值就显示具体的行为，没有就默认传index行为，注意单引号！！
		self::$action = $action_m = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
		// 乱传，引入前要判断到底有没有这个文件
		// 双引号，大哥！ 因为$control是字符串
		include_once "control/$control_m.php";

		$control_obj = new $control_m();
		$control_obj->$action_m();
	}

	// 显示界面
	public function display($html='')
	{
		// include_once "view/".self::$control."/".self::$action.".html";
		// 从view开始算的，模板文件存放的目录在view
		if ($html) {
			$this->smarty->display($html);
		}else{
			$this->smarty->display(self::$control."/".self::$action.".html");
		}
	}

	public function assign($name, $value)
	{
		// 将$value的值以name名放到模板中
		$this->smarty->assign($name, $value);
	}

	public function model($m_name)
	{
		$model_name = $m_name."Model";
		include "model/$model_name.php";
		// 返回一个对象才可以链式操作
		return new $model_name();
	}
}

?>