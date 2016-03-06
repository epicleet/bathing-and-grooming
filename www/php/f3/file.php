<?php

class File
{
	/**
	 * Handle the `view` path
	 * @var  string
	 */
	protected $ui;


	/**
	 * Start the class and set the default `view` path
	 *
	 * @author  Éderson T. Szlachta
	 * @access  public
	 */
	public function __construct()
	{
		$this->ui = Base::instance()->get('ROOT') . '/' . Base::instance()->get('UI');;
	}


	/**
	 * By Pass file cache
	 *
	 * @author  Éderson T. Szlachta
	 * @access  public
	 * @param   string   $path       [description]
	 * @param   boolean  $directory  [description]
	 * @return  string               [description]
	 */
	public function by_pass_cache( $path, $directory = FALSE )
	{
		$absolute_path = $this->ui.$path;

		$is_not_theme = preg_match('/^uploads/', $path);

		if ( $is_not_theme )
		{
			$absolute_path = $path;
		}

		if ( !file_exists($absolute_path) )
		{
			return $path;
		}

		if ( $directory )
		{
			$files = glob(dirname(realpath($absolute_path)) . '/*');
			$filemtime = 0;
			foreach ( $files as $count => $file )
			{
				$filemtime += filemtime($file);
			}
			$filemtime = floor($filemtime / $count);
		}
		else
		{
			$filemtime = filemtime($absolute_path);
		}

		$file = pathinfo($path);

		$file_url = ($file['dirname'] != '.' ? ($file['dirname'] . '/') : '') . $file['filename'] . '.' . $filemtime . '.' . $file['extension'];

		if ( $is_not_theme )
		{
			return $file_url;
		}

		return Base::instance()->get('UI') . $file_url;
	}
}
