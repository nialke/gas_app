<?php

namespace App\Entity;

class Pipe
{
    private ?string $name = null;

    private ?string $material = null;

    private ?float $minimumYieldStrength = null;

    private ?float $tensileStrength = null;

    private ?float $outerDiameter = null;

    private ?float $nominalWallThickness = null;

    private ?float $corrosionAllowance = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(?string $material): self
    {
        $this->material = $material;
        return $this;
    }

    public function getMinimumYieldStrength(): ?float
    {
        return $this->minimumYieldStrength;
    }

    public function setMinimumYieldStrength(?float $minimumYieldStrength): self
    {
        $this->minimumYieldStrength = $minimumYieldStrength;
        return $this;
    }

    public function getTensileStrength(): ?float
    {
        return $this->tensileStrength;
    }

    public function setTensileStrength(?float $tensileStrength): self
    {
        $this->tensileStrength = $tensileStrength;
        return $this;
    }

    public function getOuterDiameter(): ?float
    {
        return $this->outerDiameter;
    }

    public function setOuterDiameter(?float $outerDiameter): self
    {
        $this->outerDiameter = $outerDiameter;
        return $this;
    }

    public function getNominalWallThickness(): ?float
    {
        return $this->nominalWallThickness;
    }

    public function setNominalWallThickness(?float $nominalWallThickness): self
    {
        $this->nominalWallThickness = $nominalWallThickness;
        return $this;
    }

    public function getCorrosionAllowance(): ?float
    {
        return $this->corrosionAllowance;
    }

    public function setCorrosionAllowance(?float $corrosionAllowance): self
    {
        $this->corrosionAllowance = $corrosionAllowance;
        return $this;
    }
}