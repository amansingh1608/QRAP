//
//  ViewController.swift
//  QRReader
//
//  Created by Aman singh on 07/04/19.
// Copyright © 2019 MAGNUMIUM. All rights reserved.
//

import UIKit
import AVFoundation
import Firebase

class ViewController: UIViewController, AVCaptureMetadataOutputObjectsDelegate {
    
    var uid:String?
    @IBOutlet weak var square: UIImageView!
    
    @IBOutlet weak var label: UILabel!
    
    
    var video = AVCaptureVideoPreviewLayer()
    
    

    override func viewDidLoad() {
        // let myDatabase=Database.database().reference()
      //  myDatabase.setValue(uid)
        
       
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        label.text=uid
        //Creating session
        let session = AVCaptureSession()
        
        //Define capture devcie
        let captureDevice = AVCaptureDevice.defaultDevice(withMediaType: AVMediaTypeVideo)
        
        do
        {
            let input = try AVCaptureDeviceInput(device: captureDevice)
            session.addInput(input)
        }
        catch
        {
            print ("ERROR")
        }
        
        let output = AVCaptureMetadataOutput()
        session.addOutput(output)
        
        output.setMetadataObjectsDelegate(self, queue: DispatchQueue.main)
        
        output.metadataObjectTypes = [AVMetadataObjectTypeQRCode]
        
        video = AVCaptureVideoPreviewLayer(session: session)
        video.frame = view.layer.bounds
        view.layer.addSublayer(video)

        self.view.bringSubview(toFront: square)

        session.startRunning()
    }
    
    func captureOutput(_ captureOutput: AVCaptureOutput!, didOutputMetadataObjects metadataObjects: [Any]!, from connection: AVCaptureConnection!) {
        
        if metadataObjects != nil && metadataObjects.count != 0
        {
            if let object = metadataObjects[0] as? AVMetadataMachineReadableCodeObject
            {
                if object.type == AVMetadataObjectTypeQRCode
                {
                    let alert = UIAlertController(title: "QR Code",message:object.stringValue+uid!, preferredStyle: .alert)
                    alert.addAction(UIAlertAction(title: "Retake", style: .default, handler: nil))
                    alert.addAction(UIAlertAction(title: "Copy", style: .default, handler: { (nil) in
                        UIPasteboard.general.string = object.stringValue
                    }))
                    
                    present(alert, animated: true, completion: nil)
                    
                    let messageDB=Database.database().reference().child("attendance")
                    let messageDictionary=["QRCodeString":object.stringValue,"uid":uid]
                    
                    messageDB.setValue(messageDictionary){
                        (error,reference) in
                        if (error == nil){
                            print("attendance marked successfully")
                            
                            
                        }
                        else{
                            print("error")
                        }
                    }
                }
            }
        }
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

