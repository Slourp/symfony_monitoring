<?

namespace App\Domain\Model\Domain;

use App\Domain\Model\DomainParameter;
use App\Domain\Model\History\History;
use Doctrine\Common\Collections\ArrayCollection;

class Domain
{
    private $name;
    private $parameters;
    private $histories;

    public function __construct($name)
    {
        $this->name = $name;
        $this->parameters = new ArrayCollection();
        $this->histories = new ArrayCollection();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function addParameter(DomainParameter $parameter): self
    {
        $this->parameters->add($parameter);
        return $this;
    }

    public function removeParameter(DomainParameter $parameter): self
    {
        $this->parameters->removeElement($parameter);
        return $this;
    }

    public function getHistories()
    {
        return $this->histories;
    }

    public function addHistory(History $history): self
    {
        $this->histories->add($history);
        return $this;
    }

    public function removeHistory(History $history): self
    {
        $this->histories->removeElement($history);
        return $this;
    }
}
