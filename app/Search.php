use App\SearchTrait;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    use SearchTrait;
    
    // Optional property
    protected $search = ['title', 'content'];

}
