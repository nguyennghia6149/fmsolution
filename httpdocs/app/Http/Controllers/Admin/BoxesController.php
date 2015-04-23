<?php 
namespace App\Http\Controllers\Admin;
use App\Models\Box;
use Illuminate\Http\Request;
use Validator;

class BoxesController extends Controller 
{
	public function getIndex()
	{
		$this->setMenuAct('Boxes');
		$boxes = Box::all();
		return $this->render_view('admin_page.boxes.boxes')
					->with('boxes',$boxes);
	}

	public function getEdit($id)
	{
		$this->setMenuAct('Boxes');
		$box = Box::find($id);
		return $this->render_view('admin_page.boxes.pageForm')
					->with('box', $box);
	}

	public function upload($file)
	{
		$destinationPath = 'uploads/boxes/';
		$extension = $file->getClientOriginalExtension();
		$filename = uniqid().'.'.$extension;
		if ($file->move($destinationPath, $filename)) {
			return $filename;
		} 
		return;
	}

	public function postUpdate(Request $request)
	{
		$id = $request->id;
		
		$box = new Box;

		if (!empty($id) && Box::find($id)) {
			$box = Box::find($id);
		}
		
		$validate = Validator::make($request->all(), Box::rule());

		if ($validate->fails()) {
			return redirect()->back()
				->withErrors($validate->errors());
		} else {
			$box->title = $request->title;
			$box->description = $request->description;
			$image = $request->file('image');
			if (!empty($image)) {
				$box->image = $this->upload($image);
			}
			$box->status = $request->status;
			$box->type = $request->type;
			$box->save();
		}
		return redirect ('admin/boxes')
				->with('success', 'Save success!');
	}
}