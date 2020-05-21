public function search(Request $request){
    $output = "";
    $users = DB::table('runner')->where('ID')->get();
    return redirect('search');
}
