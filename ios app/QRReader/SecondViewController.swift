//
//  SecondViewController.swift
//  QRReader
//
//  Created by Aman singh on 07/04/19.
//  Copyright © 2019 MAGNUMIUM. All rights reserved.
//

import UIKit

class SecondViewController: UIViewController {
let abc=ViewController()
    @IBOutlet weak var enteruid: UITextField!
    
    @IBAction func button(_ sender: Any) {
        
    }
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {        
            let destinationVC=segue.destination as! ViewController
            destinationVC.uid=enteruid.text!
    }
    override func viewDidLoad() {
        super.viewDidLoad()

        // Do any additional setup after loading the view.
    }
    

   

}
