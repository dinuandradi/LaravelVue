        $feedback->sendate = $request->input('sendate');
      

        $image->save();
    return response()->json(['msg'=>$image],200);

}
}
