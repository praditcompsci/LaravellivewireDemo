<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
  
class LoadMoreUser extends Component
{
    public $perPage = 15;
    protected $listeners = [
        'load-more' => 'loadMore'
    ];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function loadMore()
    {
        $this->perPage = $this->perPage + 5;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        $users = User::latest()->paginate($this->perPage);
        $this->emit('userStore');
  
        return view('livewire.load-more-user', ['users' => $users]);
    }
}