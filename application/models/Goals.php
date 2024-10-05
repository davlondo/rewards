<?php

class Goals extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_goals($clientSegment,$clientStep,$hollow)
    {
        $sql = "SELECT week as 'week_number',sg.goal as 'week_goal', g.name name, active, active_from_date as 'starting', active_to_date as 'ending' ,threshold as 'climb',(select count(1) from customer_goals where id_mask='{$hollow}' and load_date between sg.active_from_date and sg.active_to_date ) as 'reached', if(curdate()<active_from_date,'y','b') as 'locking', (select if ((select count(1) from customer_goals where id_mask='{$hollow}') = (select count(1) from orders where id_mask='{$hollow}'),'added','waiting')) as total_redeemed from goals g join segment_goals sg on g.id = sg.goal where active=1 and step = {$clientStep} and segment= {$clientSegment}";
        $query = $this->db->query($sql);
        ## you must also add an statements here just in case the query return empty result
        #return($query->result());
        foreach ($query->result() as $row)
        {
            $data[] = array(
					   'week_number' => $row->week_number,
                       'name' => $row->name,
                       'active' => $row->active,
                       'week_goal' => $row->week_goal,
                       'starting' => $row->starting,
                       'ending' => $row->ending,
                       'reached' => $row->reached,
                       'locking' => $row->locking,
                       'total' => $row->total_redeemed,
                       'climb' => $row->climb
                  );  
        }
          return $data;
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}
