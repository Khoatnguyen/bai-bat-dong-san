<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\District;
use App\Models\FileNews;
use App\Models\News;
use App\Models\Province;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function CreateNews()
    {

        $province = Province::all();
//            $districts = District::all();
        return view('news.create-news')
            ->with(['province' => $province/*,'district'=>$districts*/]);
        // Trong with nó là 1 mảng. thì truyền vào như trên. Chứ ko khai báo nó là 1 mảng làm gì?

    }

    public function postCrateNews(Request $request)
    {
        $image = [];

        $request->validate([
            'address' => 'required',
            'project' => 'required',
            'price' => 'required|numeric',
            'price_m2' => 'required|numeric',
            'bedroom' => 'required',
            'living_rom' => 'required',
            'number_floor' => 'required',
            'files' => 'required|max:10000',
            'files.*'=>'mimes:jpg,png'
        ], [
            'address.required' => 'địa chỉ không được bỏ trống',
            'project.required' => 'dự án không được bỏ trống',
            'price.required' => 'giá tiền không được bỏ trống',
            'price.numeric' => 'giá tiền phải nhập số',
            'price_m2.required' => 'giá tiền m2 không được bỏ trống',
            'price_m2.numeric' => 'giá tiền m2 phải nhập sốs',
            'bedroom.required' => 'số phòng ngủ không được bỏ trống',
            'living_rom.required' => 'số phòng khách không được bỏ trống',
            'number_floor.required' => 'số tầng không được bỏ trống',
            'files.required'=>'Ảnh không được bỏ trống',
            'files.*.mimes'=>'chỉ tải được ảnh hoặc video',
        ]);
        //data insert dữ liệu vào bảng news

        if ($request->hasFile('files')) {

            foreach ($request->file('files') as $value) {
                $image[] = $value->store('image', 'public');
            };

        }
        $dataInsertToNews = [
            'title' => $request->title,
            'slug' => '',
            'description' => $request->description,
            'province_id' => $request->province_id,
            'district_id' => $request->district_id,
            'ward_id' => $request->ward_id,
            'address' => $request->address,
            'project' => $request->project,
            'acreage' => $request->acreage,
            'price' => $request->price,
            'price_m2' => $request->price_m2,
            'bedroom' => $request->bedroom,
            'living_rom' => $request->living_rom,
            'number_floor' => $request->number_floor,
            'direction' => $request->direction,
            'furniture' => $request->furniture,
            'frontispiece' => $request->frontispiece,
            'road' => $request->road,
            'type' => $request->type,
        ];
        $new = News::create($dataInsertToNews);
        if ($new) {
            $dataInsertToContactInfo = [
                'news_id' => $new->id,
                'name' => $request->contact_name,
                'address' => $request->contact_address,
                'email' => $request->contact_email,
                'phone' => $request->contact_phone,
            ];

            ContactInfo::Create($dataInsertToContactInfo);

            // lưu vào fileNews
            if(count($image)>0){
                foreach ($image as $key => $value){
                    FileNews::create(['news_id' =>$new->id,'path'=>$value]);
                }
            }

            return redirect()->route('home');
        }


    }
}
