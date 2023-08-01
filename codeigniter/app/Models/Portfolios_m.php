<?php

namespace App\Models;

class Portfolios_m extends \CodeIgniter\Model
{
    public function getPortfolios($lang){
        $lang = esc(strtolower($lang));

        $builder = $this->db->table('portfolios');

        $query = $builder->select('*')->where(['lang'=>$lang]);
        return $query->get()->getResult();
    }
    public function getPortfolioById(int $id){
        $builder = $this->db->table('portfolios');

        $query = $builder->select('*')->where(['id'=>$id]);
        return $query->get()->getResult()[0];
    }
    public function getLast(){
        $builder = $this->db->table('portfolios');

        $query = $builder->select('*')->orderBy('id','DESC')->limit(1);
        return $query->get()->getResult();
    }
    public function deletePortfolio(int $id){
        $builder = $this->db->table('portfolios');
        $builder->where(['id' => $id]);
        $builder->delete();
    }
    public function uploadPortfolio(array $portfolio,$lang){
        $lang= esc(strtolower($lang));
        foreach ($portfolio as $key=>$item){
            $portfolio[$key] = esc($item);
        }
        $builder = $this->db->table('portfolios');

        $builder->set([
            'title' => $portfolio['title'],
            'category' => $portfolio['category'],
            'text' => $portfolio['text'],
            'projectDate' => $portfolio['startDate'],
            'budget' => $portfolio['budget'],
            'budgetCurrency' => $portfolio['currency'],
            'client' => $portfolio['client'],
            'duration' => $portfolio['duration'],
            'lang' => $lang
        ]);
        return $builder->insert();
    }
    public function updatePortfolio(array $portfolio){
        foreach ($portfolio as $key=>$item){
            $portfolio[$key] = esc($item);
        }
        $builder = $this->db->table('portfolios');
        $builder->set([
            'title' => $portfolio['title'],
            'category' => $portfolio['category'],
            'text' => $portfolio['text'],
            'projectDate' => $portfolio['startDate'],
            'budget' => $portfolio['budget'],
            'budgetCurrency' => $portfolio['currency'],
            'client' => $portfolio['client'],
            'duration' => $portfolio['duration'],
        ]);
        $builder->where(['id'=>$portfolio['id']]);
        return $builder->update();
    }
}