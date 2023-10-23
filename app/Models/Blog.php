<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageUrl,$directory,$imageName;

    public static function imageUpload($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'uploads/blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function newBlog($request)
    {
        self::$imageUrl = self::imageUpload($request);

        self::$blog = new Blog();
        self::$blog->name       = $request->name;
        self::$blog->email      = $request->email;
        if ($request->password === $request->confirm_password) {
            self::$blog->password = bcrypt($request->password);
        }
        else {
            return redirect('/blog/add')->back()->with('message', 'Password doesnt match');
        }
        self::$blog->image      = self::$imageUrl;
        self::$blog->save();
        return self::$blog;
    }

    public static function updateBlog($request,$id)
    {
        self::$blog = Blog::find($id);
        if ($request->file('image')) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::imageUpload($request);
        }
        else {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->name   = $request->name;
        self::$blog->email  = $request->email;
        if ($request->filled('password')) {
            $request->validate([
                'current_password'  => 'required',
                'password'          => 'required|min:9|confirmed',
            ]);
                if (Hash::check($request->current_password ,self::$blog->password))
                {
                    self::$blog->password = bcrypt($request->password);
                } else {
                    return redirect('/blog/edit')->back()->with('message', 'Current password is incorrect.');
                }
        }
        self::$blog->image  = self::$imageUrl;
        self::$blog->save();
        return self::$blog;
    }
    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
