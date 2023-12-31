# checkpointlib
A package to send ML training checkpoints online in Python

When training Machine Learning models, it's common that it can take a while to train on a computer which you obviously can't sit beside all day, every day.
This library allows you to send progress checkpoints online to our servers, so that you can see your progress when you're away.

## Using checkpointlib
Once you've installed the python file containing the client-side code, you'll be able to do the following to set your program up to send progress checkpoints online.
* First, import checkpointlib:
  ```
  from checkpointlib import checkpointlib
  ```
* Create a new checkpointAccount object:
  ```
  myCheckpointAccout = checkpointlib.checkpointAccount(0)
  ```
  **OR**
  ```
  myCheckpointAccount = checkpointlib.checkpointAccount("[PUT YOUR KEY HERE]")
  ```
  If you do the first option, and make the value be the integer 0, then it will automatically create a random user key for you. However, if you choose to do the second option, then you can select your own user key.
* Save your user key for later - you can check just what your key is with ```myCheckpointAccount.key```, which you can use if you want to save to the same key later. However, you can also use ```myCheckpointAccount.url``` to get the full URL of your checkpoint account. Visit that URL to see the progress online from another device (this will be explained more later)
* Save progress to your key online - to save progress, type:
  ```
  myCheckpointAccount.saveCheckpoint("[TYPE THE PROGRESS UPDATE HERE]")
  ```
  This will save the latest progress update, which you enter as an argument, to your online key (which you can see at the URL which you receive with ```myCheckpointAccount.url```)
* Clear your checkpoint progress:
  ```
  myCheckpointAccount.clear()
  ```
  This will clear the checkpoint progress online on your key, but *does not* delete the checkpoint account.
* Delete the checkpoint account from our servers:
  ```
  myCheckpointAccount.delete()
  ```
  This will delete your account from our servers - however, it can still be created again.

## Checking progress online
To see your program's progress online, you can do one of the following:
* Go to the URL given by entering ```myCheckpointAccount.url```; OR
* Visit the webpage "https://kendasi.com/checkpoints/" + your user key (given by entering ```myCheckpointAccount.key```)

## Open source
This project is open source under the GNU 3.0 license.
You are free to use this code and anything else within the project however you see fit, besides selling it as closed-source software.
  
